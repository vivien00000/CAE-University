$(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentYear = date.getFullYear();
    var months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    function generateCalendar(month, year) {
        var daysInMonth = new Date(year, month + 1, 0).getDate();
        var firstDayOfMonth = new Date(year, month, 1).getDay();
        var $calendarDays = $(".calendar-days");
        $calendarDays.empty();
        $("#currentMonth").text(months[month] + " " + year);

        for (var i = 0; i < firstDayOfMonth; i++) {
            $calendarDays.append("<div></div>");
        }

        for (var day = 1; day <= daysInMonth; day++) {
            $calendarDays.append("<div>" + day + "</div>");
        }
    }

    generateCalendar(currentMonth, currentYear);

    $("#prevMonth").click(function () {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });

    $("#nextMonth").click(function () {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });
});