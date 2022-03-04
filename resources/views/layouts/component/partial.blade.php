<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
@if(session()->get('success')!='THANK YOU FOR REGISTERING')
    @if (session()->has('success'))
        <script>
            swal("{{session()->get('success')}}", "", "success", {
                button: "Close",

            });
        </script>
    @endif


@else

    @if (session()->has('success'))
    <script>

        swal("{{session()->get('success')}}", "", "success", {
            button: "Close",
            text:"We have now received your information our protocol team will be reviewing your application within 3-5 working days.As we are receiving a very high volume of emails and registrations,we won’t respond to every inquiry.So please make sure to check frequently your email (even thejunk/ spam folder) and your WhatsApp messages, where you should be receiving your unique pass to access the event.",

        });
    </script>

    @endif
    @endif






@if (session()->has('error'))
    <script>
        swal("{{session()->get('error')}}", "", "error", {
            button: "Close",

        });
    </script>
@endif
