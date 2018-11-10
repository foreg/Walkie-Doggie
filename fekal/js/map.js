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
       // map.setCenter(result.geoObjects.position, 12);
    });

    om = new ymaps.ObjectManager({
            clusterize: true,
            gridSize: 32,
            clusterDisableClickZoom: true
        });

    om.objects.options.set('preset', 'islands#greenDogIcon');
    om.clusters.options.set('preset', 'islands#greenClusterIcons');
    map.geoObjects.add(om);


    var data = {
    "type": "FeatureCollection",
    "features": 
    [
        {"type": "Feature", "id": 0, "geometry": {"type": "Point", "coordinates": [55.831903, 37.411961]}, "properties": {"balloonContentHeader": "хедер", "balloonContentBody": "бади", "balloonContentFooter": "футер", "clusterCaption": "123", "hintContent": "подсказка"}},
        {"type": "Feature", "id": 1, "geometry": {"type": "Point", "coordinates": [55.763338, 37.565466]}, "properties": {"balloonContentHeader": "<font size=3><b><a target='_blank' href='https://yandex.ru'>Здесь может быть ваша ссылка</a></b></font>", "balloonContentBody": "<p>Ваше имя: <input name='login'></p><p><em>Телефон в формате 2xxx-xxx:</em>  <input></p><p><input type='submit' value='Отправить'></p>", "balloonContentFooter": "<font size=1>Информация предоставлена: </font> <strong>этим балуном</strong>", "clusterCaption": "<strong><s>Еще</s> одна</strong> метка", "hintContent": "<strong>Текст  <s>подсказки</s></strong>"}},
    ]
};
    om.add(data);
}

