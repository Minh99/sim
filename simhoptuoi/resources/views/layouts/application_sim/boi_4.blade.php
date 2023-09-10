@extends('app')

@section('title', 'Bói sim 4 so cuoi')

@section('content')
    <script>
        $(document).ready(function () {

        });
    </script>
    <section class="contentPage luanSim">
        <h1 class="title_h1">Xem bói sim 6 số cuối</h1>
        <div class="bodyPage bodyLuanSim boi_sim_inputs">
            <section class="boxFormSim">
                <div class="bgFormSim">
                    <form novalidate id="form_xpts" name="form_xpts" action="{{ route('boi-sim-4-so') }}" method="post" accept-charset="UTF-8">
                        @csrf
                        <div style="display:none"></div>
                        <div class="row">
                            <input type="text" id="sinh_menh_input" name="sinh_menh_input" hidden>
                            <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                <p class="title_label"><label>Số điện thoại</label></p>
                            </div>
                            <div class="col-9 col-md-9 col-sm-9 col-xs-9">
                                <input id="xpts_phone" class="myinput" name="sdt" placeholder="Mời nhập số sim" value="">
                                @error('sdt')
                                <p class="text-white"> <i>Định dạng số điện thoại không hợp lệ</i></p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="1" type="radio" name="type" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Theo 80 số hung cát
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="2" type="radio" name="type" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Theo quẻ dịch
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="3" type="radio" name="type" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Theo năng lượng số
                            </label>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" class="btn_xemngay"><span>Xem bói số điện thoại</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection
