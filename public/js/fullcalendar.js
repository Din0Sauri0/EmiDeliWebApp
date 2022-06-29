document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('fullcalendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {

        themeSystem: 'bootstrap5',
        initialView: 'dayGridMonth',
        locale: 'es',
        headerToolbar: {
            left: 'prev,today,next',
            center: 'title',
            right: 'dayGridMonth,listWeek'
        },
        titleFormat: { month: 'short'},
        
        events: "http://127.0.0.1:8000/pedido/cargar",
        eventColor: '#7FB5FF',

        eventClick:function(info) {
            let id = info.event.id;
            axios.request('http://127.0.0.1:8000/pedido/'+id).then((res)=>{
                if(res.status==200){
                    location.href = 'http://127.0.0.1:8000/pedido/'+id;
                };
            });
        }
    });
    calendar.render();
});