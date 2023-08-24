import datetime
import json
from flask import Flask, redirect, render_template, request, url_for
from boi_sim import boi_sim

app = Flask(__name__)

# API ========================================================
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
 
# WEB ========================================================
@app.route('/')
def index():
    return render_template('index.html')



if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True, use_reloader=True)
