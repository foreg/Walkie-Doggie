var map;
ymaps.ready(init);
function init()
{
    var map = new ymaps.Map("map", 
    {
        center: [55.76, 37.64],
        zoom: 11,
        controls: ['zoomControl']
    });

    ymaps.geolocation.get(
    {
        provider: 'auto',
        mapStateAutoApply: true
    }).
    then(function (result)
    {
        map.setCenter(result.geoObjects.position, 12);
    });

    om = new ymaps.ObjectManager({
            clusterize: true,
            gridSize: 32,
            clusterDisableClickZoom: true
        });

    om.objects.options.set('preset', 'islands#redDogIcon');
    om.clusters.options.set('preset', 'islands#redClusterIcons');
    map.geoObjects.add(om);

    $.ajax
    ({
        url: 'getCoords',
        success: function(data)
        {
            om.add(data);
        }
    });
}