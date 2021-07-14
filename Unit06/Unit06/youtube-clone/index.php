<?php
$API_key    = 'AIzaSyA-CdFLFvNg3yVDzOqtQwIjRyObmvGnNes';
$channelID  = 'UC_nTrhTr5fnBGjOxnkPUmmA';
$maxResults = 12;
$apiError ='Video not found!';
try {
  $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.'');
  if($apiData){
    $videoList = json_decode($apiData);
  }else{
    throw new Exception('Invalid API key or channel ID.');
  }
} catch (\Exception $e) {
  $apiError = $e->getMessage();
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Material Icons -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- CSS File -->
    <link rel="stylesheet" href="styles.css" />
    <title>Youtube</title>
  </head>
  <body>
    <!-- Header Starts -->
    <div class="header">
      <div class="header__left">
        <i id="menu" class="material-icons">menu</i>
        <img
          src="https://www.youtube.com/about/static/svgs/icons/brand-resources/YouTube-logo-full_color_light.svg?cache=72a5d9c"
          alt=""
        />
      </div>

      <div class="header__search">
        <form action="">
          <input type="text" placeholder="Search" />
          <button><i class="material-icons">search</i></button>
        </form>
      </div>

      <div class="header__icons">
        <i class="material-icons display-this">search</i>
        <i class="material-icons">videocam</i>
        <i class="material-icons">apps</i>
        <i class="material-icons">notifications</i>
        <i class="material-icons display-this">account_circle</i>
      </div>
    </div>
    <!-- Header Ends -->

    <!-- Main Body Starts -->
    <div class="mainBody">
      <!-- Sidebar Starts -->

      <div class="sidebar">
        <div class="sidebar__categories">
          <div class="sidebar__category">
            <i class="material-icons">home</i>
            <span>Home</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">local_fire_department</i>
            <span>Trending</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">subscriptions</i>
            <span>Subcriptions</span>
          </div>
        </div>
        <hr />
        <div class="sidebar__categories">
          <div class="sidebar__category">
            <i class="material-icons">library_add_check</i>
            <span>Library</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">history</i>
            <span>History</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">play_arrow</i>
            <span>Your Videos</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">watch_later</i>
            <span>Watch Later</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">thumb_up</i>
            <span>Liked Videos</span>
          </div>
        </div>
        <hr />
      </div>
      <!-- Sidebar Ends -->

      <!-- Videos Section -->
      <div class="videos">
        <h1>Recommended</h1>

        <div class="videos__container">
          <!-- Single Video starts -->
<?php
if(!empty($videoList->items)){
    foreach($videoList->items as $item){
        // Embed video
        if(isset($item->id->videoId)){
          ?>
          <div class="video">
            <div class="video__thumbnail">
                <a href="https://www.youtube.com/watch?v=<?php echo $item->id->videoId; ?>"><img src="<?php echo $item->snippet->thumbnails->high->url; ?>" alt="" /></a>
            </div>
            <div class="video__details">
              <div class="author">
                <a href="https://www.youtube.com/channel/<?php echo $item->snippet->channelId; ?>"><img src="profile.png" alt="" /></a>
              </div>
              <div class="title">
                <h3>
                <a href="https://www.youtube.com/watch?v=<?php echo $item->id->videoId; ?>"><?php echo  $item->snippet->title;  ?></a>
                </h3>
                <a href="https://www.youtube.com/channel/<?php echo $item->snippet->channelId; ?>"><?php echo $item->snippet->channelTitle; ?></a>
                <span>10M Views • 3 Months Ago</span>
              </div>
            </div>
            </div>
            <?php
        }else{
    echo '<p class="error">'.$apiError.'</p>';
}
    }
}
  ?>
          </div>
          <!-- Single Video Ends -->


        </div>
      </div>
    </div>
    <script src="index.js"></script>
    <!-- Main Body Ends -->
  </body>
</html>
