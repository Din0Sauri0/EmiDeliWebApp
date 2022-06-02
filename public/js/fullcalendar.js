document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('fullcalendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',
        locale: 'es',
        headerToolbar: {
            left: 'prev,today,next',
            center: 'title',
            right: 'dayGridMonth,listWeek'
        },
        events: "http://127.0.0.1:8000/pedido/cargar",
        eventColor: '#7FB5FF',
    });
    calendar.render();
});