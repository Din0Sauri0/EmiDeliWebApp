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


    });
    calendar.render();
});