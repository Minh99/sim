# class boi_sim contains all functions to handle boi sim data
import os
from dotenv import load_dotenv
from driver_manager import *

class boi_sim:
    HEADER_BOI_SIM = ['id', 'so_que', 'ten_que', 'hinh_que', 'tong_quat', 'que', 'danh_gia', 'y_nghia_que', 'luan_giai_sim', 'chiem_nghiem_ve_van_the', 'xet_ve_gia_dao_tinh_cam', 'dong_hao_1', 'dong_hao_2', 'dong_hao_3', 'dong_hao_4', 'dong_hao_5', 'dong_hao_6', 'nx_ve_mqh_giua_chu_va_sim']
    load_dotenv()
    sheet_id_boi_sim = os.environ['ROOT_ID_GOOGLE_SHEET_BOI_SIM']
    currentPath = os.path.dirname(os.path.realpath(__file__)) + f"/data_sheets"
    boi_sim_file_json = os.path.join(currentPath, f"{sheet_id_boi_sim}.json")
    boi_sim_file_excel = os.path.join(currentPath, f"{sheet_id_boi_sim}.xlsx")
    
    def __init__(self, sdt):
        self.sdt = sdt
    
    def handle_get_info_by_sdt(self):
        if (self.sdt[0] == '0'):
            # remove 0 first
            self.sdt = self.sdt[1:]
        
        # get 4 first number
        four_first_number = self.sdt[:4]
        # get 5 last number
        five_last_number = self.sdt[-5:]
        
        four_first_number_mod_8 = self.cal_digit_mod_8(four_first_number)
        five_last_number_mod_8 = self.cal_digit_mod_8(five_last_number)
        
        id = (four_first_number_mod_8 * 10) + five_last_number_mod_8
        
        data_boi_sim = self.get_boi_sim_from_json()
        
        if (len(data_boi_sim) > 0):
            for item in data_boi_sim:
                if (int(item['id']) == id):
                    print(item)
                    return item

            return data_boi_sim[0]
            
        return {}
        
    def cal_digit_mod_8(self, input):
        total = 0
        for digit in str(input):
            total += int(digit)

        mod_8 = total % 8

        return mod_8 if mod_8 != 0 else 8

    def get_boi_sim_from_json(self):
        try:
            print(self.boi_sim_file_json)
            data = convert_json_file_to_array(self.boi_sim_file_json)
            return data
        except Exception as e:
            print('[error]get_boi_sim_from_json', e)
            return []
    
    def sync_data_from_driver_to_excel_to_json(self):
        try:
            file_sim_xlsx = download_file_excel_from_driver(self.sheet_id_boi_sim)
            data = excel_to_json(file_sim_xlsx, self.HEADER_BOI_SIM, 3, None, 2, 19)
            save_to_json(data, self.boi_sim_file_json)
        except Exception as e:
            print('[error]sync_data_from_driver_to_excel_to_json', e)
