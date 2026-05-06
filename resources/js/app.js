import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');

    if (calendarEl) {
        const calendar = new Calendar(calendarEl, {
            plugins: [ dayGridPlugin, timeGridPlugin, interactionPlugin ],
            initialView: 'timeGridDay',
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'prev,next'
            },
            slotMinTime: '08:00:00',
            slotMaxTime: '20:00:00',
            editable: true,
            selectable: true,
            allDaySlot: false,
            events: '/api/events', 
            
            eventClassNames: 'custom-task-card',
        });

        calendar.render();
    }
});