import io
import os
import google.auth
from google.oauth2.credentials import Credentials
from googleapiclient.discovery import build
from googleapiclient.errors import HttpError
from googleapiclient.http import MediaFileUpload, MediaIoBaseDownload
from google.oauth2 import service_account
from google_auth_oauthlib.flow import InstalledAppFlow
from openpyxl import load_workbook
import json

# Constants
currentPath = os.path.dirname(os.path.realpath(__file__))
folder_driver = '10ZL-GuZJGJW_9FxfgtBjy0g-ibVhJi8E' # folder id of driver minh
# ============================================================

# AUTHENTICATION
credentials = service_account.Credentials.from_service_account_file(
    currentPath + '/service_account.json',
    scopes=['https://www.googleapis.com/auth/drive']
)
service = build('drive', 'v3', credentials=credentials)

# ============================================================

def upload_to_driver(folder_driver, filename):
    file_metadata = {'name': filename, 'parents': [folder_driver]}
    media = MediaFileUpload(currentPath + '/' + filename, mimetype='application/pdf')
    file = service.files().create(body=file_metadata, media_body=media, fields='id').execute()
    print(f'File ID: {file.get("id")}')
    print('https://drive.google.com/file/d/' + file.get('id') + '/view?usp=share_link')
    # https://drive.google.com/file/d/{id-file}/view?usp=share_link

def get_files_from_driver(folder_driver):
    ids = []
    results = service.files().list(
        pageSize=10, fields="nextPageToken, files(id, name)", q=f"'{folder_driver}' in parents").execute()
    items = results.get('files', [])
    if not items:
        print('No files found.')
    else:
        print('Files:')
        for item in items:
            print(f"{item['name']} ({item['id']})")
            ids.append(item['id'])
    
    return ids

def download_file_excel_from_driver(file_id):
    request = service.files().export_media(fileId=file_id, mimeType='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
    fh = io.FileIO('data_sheets/' + file_id + '.xlsx', 'wb')
    downloader = MediaIoBaseDownload(fh, request)
    done = False
    while done is False:
        status, done = downloader.next_chunk()
    
    return 'data_sheets/' + file_id + ".xlsx"

def excel_to_json(file_path, header, min_row, max_row, min_col, max_col):
    workbook = load_workbook(file_path)
    sheet = workbook.active

    data = []
    min_row = min_row if min_row else sheet.min_row
    max_row = max_row if max_row else sheet.max_row
    min_col = min_col if min_col else sheet.min_col
    max_col = max_col if max_col else sheet.max_col
    

    for row in sheet.iter_rows(min_row=min_row, max_row=max_row, min_col=min_col, max_col=max_col):
        row_data = {}
        for idx, cell in enumerate(row):
            row_data[header[idx]] = cell.value
        data.append(row_data)

    return data


def save_to_json(data, output_file):
    non_empty_data = [row for row in data if any(value is not None for value in row.values())]

    with open(output_file, 'w', encoding='utf-8') as json_file:
        json.dump(non_empty_data, json_file, indent=4, ensure_ascii=False)

def convert_json_file_to_array(file_path):
    with open(file_path, encoding='utf-8') as json_file:
        data = json.load(json_file)
    
    return data

# is_sync = False
# if __name__ == '__main__':
    # upload_to_driver(folder_driver, '0317698129.pdf')
    # file_ids = get_files_from_driver(folder_driver)
    # file_sim_xlsx = sheet_id_boi_sim + '.xlsx'
    # if is_sync == True:
    #     file_sim_xlsx = download_file_excel_from_driver(sheet_id_boi_sim)
    # else:
    #     data = excel_to_json(file_sim_xlsx)
    #     save_to_json(data, sheet_id_boi_sim + '.json')
    #     print(len(convert_json_file_to_array(sheet_id_boi_sim + '.json')))