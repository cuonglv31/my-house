<!-- Start contact Area -->
<section class="contact-area" id="contact">
    <div class="container-fluid">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-5 col-md-12 contact-left no-padding">
                <img class="img-fluid" src="./frontend/img/contact-img.jpg" alt="">
            </div>
            <div class="col-lg-7 col-md-12 contact-right no-padding">
                <h2 class="py-3">Send me Message</h2>
                {!! Form::open(['class' => 'formValidate booking-form', 'id' => 'myForm']) !!}
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <div class="form-row mb-md-3">
                                <div class="col-md-6 {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'First Name', 'required'=>'true']) !!}
                                </div>
                                <div class="col-md-6 {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Last Name', 'required'=>'true']) !!}
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 d-flex flex-column">
                            <div class="form-row">
                                <div class="col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Email', 'required'=>'true']) !!}
                                </div>
                                <div class="col-md-6 {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Phone', 'required'=>'true']) !!}
                                </div>
                            </div>
                        </div>									
                        <div class="col-lg-12 flex-column">
                        {!! Form::textarea('message', null, ['class' => 'form-control mt-20', 'rows' => 7, 'placeholder'=>'Enter your massage for us here. We will get back to you' , 'required'=>'true']) !!}
                        </div>
                        
                        <div class="col-lg-12 d-flex justify-content-end send-btn">
                            <button class="submit-btn primary-btn mt-20 text-uppercase ">confirm booking<span class="lnr lnr-arrow-right"></span></button>
                        </div>

                        <div class="alert-msg"></div>		
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>						
        </div>
    </div>	
</section>
<!-- End contact Area -->