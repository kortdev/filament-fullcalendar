<?php

/**
 * Consider this file the root configuration object for FullCalendar.
 * Any configuration added here, will be added to the calendar.
 * @see https://fullcalendar.io/docs#toc
 */

return [
    'timeZone' => config('app.timezone'),

    'locale' => config('app.locale'),

    'headerToolbar' => [
        'left' => 'prev,next today',
        'center' => 'title',
        // 'right' => 'dayGridMonth,dayGridWeek,dayGridDay,list,resourceTimeGridDay,resourceTimeGridWeek,resourceTimeGridMonth',
        'right' => 'dayGridMonth,dayGridWeek,listWeek',
    ],

    'weekNumbers' => true,
    'weekNumberFormat' => [
        "week" => 'narrow'
    ],

    'navLinks' => true,

    'editable' => false,

    'selectable' => false,

    'dayMaxEvents' => true,

    'displayEventTime' => false,
];
