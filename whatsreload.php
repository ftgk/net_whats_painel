<script type="text/javascript">


    var timer;

    function refreshIframe() {
        if (timer)
            clearInterval(timer)
        timer = setTimeout(refreshIframe, 3000)
        var iframe = document.getElementById('iframe');
        iframe.src = 'http://dev.servtv.com.br/whats/assets/img/whats.jpg?=' + Math.random() + '';
    }

    refreshIframe();
</script>
<iframe id="iframe" src="http://dev.servtv.com.br/whats/assets/img/whats.jpg" width="100%" height="300px">
    <p>Your browser does not support iframes.</p>
</iframe>
