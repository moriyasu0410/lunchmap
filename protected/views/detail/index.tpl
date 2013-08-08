<div class="row">
<br>
<br>
<br>
  <div class="span2"><h3>Detail</h3></div>
  <div class="span10">
    <div class="media">
        <ul class="thumbnails">
        <li class="span3">
            <a class="thumbnail" href="{Yii::app()->request->baseUrl}/images/{$lunch['image']}" target=blank>
            <img src="{Yii::app()->request->baseUrl}/images/{$lunch['image']}">
        </a>
        </li>
        <li class="span9">
        <div class="media-body">
            <h4 class="media-heading">{$lunch["shop_name"]}</h4>
            <dl class="dl-horizontal">
            <dt>メニュー</dt><dd>{$lunch["menu"]}</dd>
            <dt>訪問日</dt><dd>{$lunch["visit_date"]->sec|date_format:"%Y/%m/%d(%a)"}</dd>
            <dt>価格</dt><dd>¥{$lunch["price"]}</dd>
 	        <dt>最寄り駅</dt><dd>{$lunch["nearest"]}</dd>
 	        <dt>場所<i class="icon-map-marker"></i></dt><dd><a href='https://maps.google.com/maps?q={$lunch["location"][1]},{$lunch["location"][0]}' target=blank>地図</a></dd>
 	        </dl>
        </div>
        </li>
        </ul>
    </div>
  </div>
</div>

