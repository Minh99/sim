import datetime
import json
from flask import Flask, redirect, render_template, request, url_for
from boi_sim import boi_sim

app = Flask(__name__)

@app.route('/api/boi_sim/sync', methods=['POST'])
def boi_sim_sync_func():
    sim = boi_sim('')
    sim.sync_data_from_driver_to_excel_to_json()
    return json.encoder.JSONEncoder().encode({'status': 'ok'})

@app.route('/api/boi_sim', methods=['POST'])
def boi_sim_func():
    sdt = request.form['sdt']
    sim = boi_sim(sdt)
    return sim.handle_get_info_by_sdt()
    
@app.route('/verify', methods=['POST'])
def verify():
    content = request.form['content']
    file_name = datetime.datetime.now().strftime("%Y-%m-%d-%H-%M-%S") + str(datetime.datetime.now().microsecond) + '.txt'
    with open(FOLDER + file_name, 'w', encoding='utf-8') as f:
        f.write(content)
    
    return json.encoder.JSONEncoder().encode({'status': 'ok'})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
