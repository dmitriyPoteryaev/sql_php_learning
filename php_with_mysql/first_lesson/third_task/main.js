// данная запись является коротким эквивалентом $(document).ready(...). Код внутри выполняется, когда DOM полностью загружен

 $(function () {

// $buttonList - это jqeury-объект, а не обычный DOM-узел ( по соглашению переменные с $ - jquery-объекты).
//jquery-объекты - это обёртка над DOM-узлом. Эта обёртка облегчает работу с DOM элементами 

const $buttonList = $('#list_buttons');


// Делегирование клика по кнопкам внутри списка

$buttonList.on('click', 'button', function (event) {

    const $btn = $(this);

    // берём дата-абрибут по нажатию кнопки

    const sort = $btn.data('sort');
 
    const order = $btn.data('order');

    const url = new URL(window.location.href);

    const params = url.searchParams;

    const currentSort = sort || params.get('sort') ||  "amount";

    const currentOrder =  order || params.get('order') || "DESC";

    // обновляем параметры в url

    params.set("sort", currentSort);

    params.set("order", currentOrder);

    window.location = url.toString();

})



});