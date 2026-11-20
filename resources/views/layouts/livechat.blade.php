{{-- Add your livechat, telegram code here  --}}

{{--Start whatsapp code --}}

@if(isset($settings) && $settings->whatsapp)
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "{{$settings->whatsapp}}", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
            pre_filled_message: "Hello I am", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
@endif

{{-- End whatsap code  --}}


{{-- Paste Your  Live chart code  From Down Here --}}

@auth
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
@if(Auth::check() && Auth::user())
Tawk_API.visitor = {
    name: {!! json_encode(Auth::user()->name ?? Auth::user()->username ?? 'Client') !!},
    email: {!! json_encode(Auth::user()->email ?? '') !!}
};
@endif
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6b00605e2326133c9de4aa48/1k7sngubc';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endauth

{{-- End livechat code  --}}
