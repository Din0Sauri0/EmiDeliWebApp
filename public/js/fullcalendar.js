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

        dateClick:function(info) {
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;

        }


    });
    calendar.render();
});