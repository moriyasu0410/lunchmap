{foreach $lunches as $lunch}
    <div class="media">
        <ul class="thumbnails">
        <li class="span2">
            <a class="thumbnail" href="../detail/?id={$lunch["obj"]["_id"]}">
                <img src="{Yii::app()->request->baseUrl}/images/{$lunch["obj"]['image']}">
            </a>
        </li>
        <div class="media-body">
            <h4 class="media-heading">{$lunch["obj"]["shop_name"]}</h4>
            <dl class="dl-horizontal">
            <dt>訪問日</dt><dd>{$lunch["obj"]["visit_date"]->sec|date_format:"%Y/%m/%d(%a)"}</dd>
            <dt>メニュー</dt><dd>{$lunch["obj"]["menu"]}</dd>
            <dt>最寄り駅</dt><dd>{$lunch["obj"]["nearest"]}</dd>
            <dt>ここから</dt><dd>{$lunch["distance"]} m</dd>
            </dl>
        </div>
        </ul>
    </div>
{/foreach}
<div id="total">{$total}</div>
<div id="has_next">{$hasNext}</div>
