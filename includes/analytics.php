<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;


var elementIds = [{id: 'home-slider-utilities'},{id: 'footer'},{id: 'row1'}];

$(document).ready(function(){


    $('article').find('[id]').each(function(){
        elementIds.push({id:this.id});
        //console.log(this.id);
    });

    ga('create', 'UA-61756900-29', 'auto',{'name':'prop_1'});
    ga('prop_1.require', 'eventTracker');
    ga('prop_1.require', 'outboundLinkTracker');
    ga('prop_1.require', 'impressionTracker', {elements: elementIds});
    ga('prop_1.send', 'pageview');
    ga('create', 'UA-43397511-1', {'name':'emory'});
    ga('emory.send', 'pageview');
});
</script>
<script async="async" src="https://www.google-analytics.com/analytics.js"></script>
<script async="async" src="https://template.library.emory.edu/js/plugins/analytics/autotrack/autotrack.js"></script>
