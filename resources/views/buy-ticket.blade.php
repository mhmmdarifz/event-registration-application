@extends('template.base')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader.jpg) bottom">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h1>Beli Tiket</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 offset-md-2">
                        <form name="contactForm" id='contact_form' class="form-border" method="post">
                            <div class="g-custom-x align-items-center">

                                <h4>
                                    Nama Lengkap<span class="id-color">*</span>
                                    <span id="nameError" class="text-danger"></span>
                                </h4>
                                <input type='text' name='Name' id='name' class="form-control"
                                    placeholder="Masukkan nama lengkap">

                                <div class="clearfix"></div>

                                <h4>
                                    Nomor Handphone<span class="id-color">*</span>
                                    <span id="phoneNumberError" class="text-danger"></span>
                                </h4>

                                <input type='text' name='Phone' id='phone' class="form-control"
                                    placeholder="Masukkan nomor handphone">

                                <div class="clearfix"></div>

                                <h4>
                                    Email<span class="id-color">*</span>
                                    <span id="emailError" class="text-danger"></span>
                                </h4>
                                <input type='text' name='Email' id='email' class="form-control"
                                    placeholder="Masukkan email">

                                <div class="clearfix"></div>

                                <h4>
                                    Jenis Tiket<span class="id-color">*</span>
                                    <span id="ticketError" class="text-danger"></span>
                                </h4>
                                <div class="row">
                                    <div class="col-4">
                                        <input id="regularTicket" type="radio" name="ticket" value="regular">
                                        <label for="regularTicket">REGULAR (<span class="id-color">Rp
                                                200.000</span>)</label>
                                    </div>
                                    <div class="col-4">
                                        <input id="rockstarTicket" type="radio" name="ticket" value="rockstar">
                                        <label for="rockstarTicket">ROCKSTAR (<span class="id-color">Rp
                                                400.000</span>)</label>
                                    </div>
                                    <div class="col-4">
                                        <input id="vipTicket" type="radio" name="ticket" value="vip">
                                        <label for="vipTicket">VIP (<span class="id-color">Rp 800.000</span>)</label>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <button id="ticketForm" type="submit" class="mt20 btn btn-main btn-block">Pesan
                                    Tiket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
