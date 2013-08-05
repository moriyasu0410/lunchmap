{foreach $lunches as $lunch}
    <div class="media">
        <ul class="thumbnails">
        <li class="span2">
            <a class="thumbnail" href="../detail/?id={$lunch["_id"]}">
                <img src="{Yii::app()->request->baseUrl}/images/{$lunch['image']}">
            </a>
        </li>
        <div class="media-body">
            <h4 class="media-heading">{$lunch["shop_name"]}</h4>
            <dl class="dl-horizontal">
            <dt>訪問日</dt><dd>{$lunch["visit_date"]->sec|date_format:"%Y/%m/%d(%a)"}</dd>
            <dt>メニュー</dt><dd>{$lunch["menu"]}</dd>
         	<dt>最寄り駅</dt><dd>{$lunch["nearest"]}</dd>
 	        </dl>
        </div>
        </ul>
    </div>
{/foreach}
<div id="total"></div>
<div id="has_next"></div>