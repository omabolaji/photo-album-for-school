@extends('layouts.home')

@section('content')

<div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
        <div class="container">
        <div class="row no-gutters slider-text align-items-center">
        <div class="col-md-9 ftco-animate">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Contact Us</span></p>
        <h1 class="mb-3 bread">Contact Us</h1>
        <p>Make it a reality, blogs, comments, upload images and a lot more, we offer the best photo album for you and your friends.. <br> You can get in touch with us now by send your request through the form below... Thanks</p>
        </div>
        </div>
        </div>
        </section>
        <section class="ftco-section contact-section">
        <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
        <h2 class="h3">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
        <div class="info bg-light p-4">
        <p><span>Address:</span> SOL Drive, Southern View Estate,<br> Lekki, Ajah <br> lagos.</p>
        </div>
        </div>
        <div class="col-md-3 d-flex">
        <div class="info bg-light p-4">
        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
        </div>
        <div class="col-md-3 d-flex">
        <div class="info bg-light p-4">
        {{--  <p><span>Email:</span> <a href="https://colorlib.com/cdn-cgi/l/email-protection#234a4d454c635a4c5651504a57460d404c4e"><span class="__cf_email__" data-cfemail="0b62656d644b72647e7978627f6e25686466">[email&#160;protected]</span></a></p>  --}}
        <p><span>Email:</span> info@optisoft.ng</p>
        </div>
        </div>
        <div class="col-md-3 d-flex">
         <div class="info bg-light p-4">
        <p><span>Website</span> <a href="#">optisoft.ng</a></p>
        </div>
        </div>
        </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                <form action="/sendContact" method="POST" id="contactForm" class="bg-light p-5 contact-form">
                    {{ csrf_field() }}
                <div class="form-group">
                        @include('inc.messages')
                </div>
                <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group" id="loaders">
                    <img id="spinner" src="/assets2/images/spinner.gif" width="150" style="display:none;">
                </div>
                <div class="form-group">
                <input type="submit" id="sendBtn" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
                </form>
                </div>
                <div class="col-md-6 d-flex">
                {{--  <div id="map-canvas" class="bg-light"></div>  --}}
                <div id="map-canvas"></div>
                </div>
                                {{--  //google map api  --}}
                <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyDoSssoK33cn4_RKt7DohD3f7Cxx_u8H1Q&amp;&scale=2" type="text/javascript">
                </script>

                <script>
                    $(document).ready(function(){

                                var myLatLng = {lat: 6.6000, lng: 3.5000};

                    var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 15,
                    center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'PhotoAlbum'
                    });
                    });
                </script>
            </div>
        </div>
        </section>




        <script>
            //variables
            const contactForm = document.getElementById('contactForm'),
                  sendBtn = document.querySelector('#sendBtn'),
                  name = document.querySelector('#name'),
                  email = document.querySelector('#email'),
                  subject = document.querySelector('#subject'),
                  message = document.getElementById('message');

            //eventListeners
            eventListeners();

            function eventListeners(){

                //sendBtn.addEventListener('click', sendBtnDisable);
                document.addEventListener('DOMContentLoaded', sendBtnDisable);

                //validation
                name.addEventListener('blur', validationFields);
                email.addEventListener('blur', validationFields);
                subject.addEventListener('blur', validationFields);
                message.addEventListener('blur', validationFields);

                //form  and submittion
                contactForm.addEventListener('submit', submitForm);
            }

            //functions

            function sendBtnDisable(){
                //disable send btn when fields is not validated
                 sendBtn.disabled = true;
             }


            function submitForm(e){
                //e.preventDefault();

                //var url = this.attr('action');
                //display spinner
                const spinner = document.getElementById('spinner');
                      spinner.style.display = 'block';

                //display message sender image after sinner
                const MessageImage = document.createElement('img');
                      MessageImage.src = '/assets2/images/mail.gif';
                      MessageImage.style.width = '150px';
                      MessageImage.style.display = 'block';

                setTimeout(function(){

                    //stop spinner after some sec
                    spinner.style.display = 'none';

                    //display message image after spinner
                    document.querySelector('#loaders').appendChild(MessageImage);

                    setTimeout(function(){

                        //reset input field
                        contactForm.reset();

                        //remove image
                        MessageImage.remove();
                    }, 4000);

                }, 4000);
                      //contactForm.appendChild(spinner);

            }

            function validationFields(){

                let errors;

                //validate fields length
                validateLength(this);

                //valiadte email sign '@'
                if(this.type === 'email'){
                    validateEmail(this);
                }

                //check if all fields are error free
                errors = document.querySelectorAll('.error');

                if(name.value !== '' && email.value !== '' && subject.value !== '' && message.value !== ''){
                    if(errors.length === 0){
                        sendBtn.disabled = false;
                    }
                }
            }


            function validateLength(field){
                    //check is the input field is not null or zero
                if(field.value.length > 0){
                  field.style.borderBottomColor = 'green';
                  field.classList.remove('error');
                }else{
                    field.style.borderBottomColor = 'red';
                    field.classList.add('error');
                }
            }

            function validateEmail(field){
                let textEmail = field.value;
                if(textEmail.indexOf('@') !== -1){
                    field.style.borderBottomColor = 'green';
                    field.classList.remove('error');
                }else{
                    field.style.borderBottomColor = 'red';
                    field.classList.add('error');
                }
            }

        </script>


@endsection
