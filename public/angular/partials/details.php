<section class="artistinfo">
    <div class="artist cf" ng-model="artists">
        <a href="#/details/{{prevItem}}" class="btn btn-left">&lt;</a>
        <a href="#/details/{{nextItem}}" class="btn btn-right">&gt;</a>

        <h1>{{artists[whichItem].name}}</h1>
        <div class="info">
            <h3>{{artists[whichItem].reknown}}</h3>
            <img ng-src="images/{{artists[whichItem].shortname}}_tn.jpg" alt="Photo of {{artists[whichItem].name}}">
            <div class="bio">{{artists[whichItem].bio}}</div>
        </div>
    </div>
    <a href="index.php#/list">&laquo; Back to search</a>
</section>