<!DOCTYPE html>
<html>

<head>
    <style>
        iframe {
            width: 786px;
            height: 600px;
            border: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>
<iframe id="iframeid"
        src="../../assets/whats/assets/img/whats.jpg"
        width="600"
        height="450"
        frameborder="0"
        style="border:0"
        allowfullscreen>
</iframe>
<input type="button"
       id="btn"
       value="Refresh" />

<script>
    function reload() {
        document.getElementById('iframeid').src += '';
    }
    btn.onclick = reload;
</script>

</body>

</html>