<link href='ui/styles/partials/video_widget.css' rel='stylesheet' />

<div class="Navigation">
    <img onClick="channel.getVidContent(channel.yt_prevPageToken)" src="ui/images/blue_left.png" />
    <img onClick="channel.getVidContent()" src='ui/images/blue_home.png' />
    <img onClick="channel.getVidContent(channel.yt_nextPageToken)" src="ui/images/blue_right.png" />
</div>

<div class='Screen'></div>

<script src='ui/scripts/partials/channel.js'></script>

<script>
const script = document.createElement("script")
    script.src = "https://apis.google.com/js/client.js"
    script.onload = () => {
      window.gapi.load('client', () => {
        channel.getVidContent()
      })
    }

    document.body.appendChild(script)
</script>