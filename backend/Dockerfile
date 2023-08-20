FROM python:3.9.10-alpine3.14
WORKDIR .

RUN pip install --upgrade pip
RUN pip install openpyxl
RUN pip install gspread
RUN pip install google-api-python-client
RUN pip install python-dotenv
RUN pip install Flask

COPY . .
ENV FLASK_APP=app
CMD ["python","app.py"]
