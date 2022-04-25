(function ($) {
	"use strict";

  var calendar,
  e,
  noticed = false,
  option = {
    header: {
      left: 'title, prev, next',
      center: '',
      right: ''
    },
    contentHeight: 'auto',
    defaultView: 'agendaWeek',
    defaultDate: moment().format('YYYY-MM-DD'),
    editable: true,
    eventLimit: false,
    viewRender: function (view, element) {
      // style
      element.find('th.fc-day-header.fc-widget-header').each(function () {
        if($(this).data('date')){
          var date = moment($(this).data('date'));
          $(this).html('<span>' + date.format('D') + '</span><span class="fc-week-title">' + date.format('dddd') + '</span>');
        }
      })
    },
    eventRender: function(event, element) {
      // render
      element.find('.fc-content').append('<div class="mt-1 text-muted">'+event.description+'</div>');
      element.find('.fc-content').append( '<div class="d-flex my-3 avatar-group">' + getParticipant(event, 24) + '</div>');
    },
    eventClick: function(event, jsEvent) {
      $('#newEvent').modal('show');
      e = event;
      getEvent(event);
    }
  };

  function setupEvents(){
    $(document).on('click', '#dayview', function() {
      calendar.fullCalendar('changeView', 'agendaDay');
      sr.sync();
    });

    $(document).on('click', '#weekview', function() {
      calendar.fullCalendar('changeView', 'agendaWeek');
      sr.sync();
    });

    $(document).on('click', '#monthview', function() {
      calendar.fullCalendar('changeView', 'month');
      sr.sync();
    });

    $(document).on('click', '#todayview', function() {
      calendar.fullCalendar('today');
      sr.sync();
    });

    $(document).on('click', '#btn-new', function() {
      $('#newEvent').modal('show');
      e = {title:'', description:'', start:moment(), end:moment().add(4, 'h'), participant:'1', type:'', className: 'block b-t b-t-2x b-primary'};
      getEvent(e);
    });

    $(document).on('click', '#btn-save', function() {
      var e = getEvent();
      if(e.id){
        calendar.fullCalendar( 'updateEvent', e );
      }else{
        e.id = moment().toDate();
        calendar.fullCalendar( 'renderEvent', e );
      }
      $('#newEvent').modal('hide');
    });
  }

  function getEvent(event){
    var el_title = $('#event-title'),
        el_desc = $('#event-desc'),
        el_type = $('#event-type'),
        el_start_date = $('#event-start-date'),
        el_start_time = $('#event-start-time'),
        el_end_date = $('#event-end-date'),
        el_end_time = $('#event-end-time'),
        el_participant = $('#event-participant');
    // set date to form
    if(event){
      el_title.val(event.title);
      el_desc.val(event.description);
      console.log(event.type);
      el_type.find('input[value="'+event.type+'"]').prop('checked', true);
      el_participant.html( getParticipant(event, 32) );
      el_start_date.val(moment(event.start).format("YYYY-MM-DD"));
      el_start_time.val(moment(event.start).format("HH:mm"));
      el_end_date.val(moment(event.end).format("YYYY-MM-DD"));
      el_end_time.val(moment(event.end).format("HH:mm"));
    // get data from form
    }else{
      e.title = el_title.val();
      e.type = el_type.find('input:checked').val();
      e.start = moment(el_start_date.val() +' '+ el_start_time.val());
      e.end = moment(el_end_date.val() +' '+ el_end_time.val());
      e.description = el_desc.val();
    }
    return e;
  }

  function getParticipant(event, size){
    var participant = '';
    var size = size || 24;
    $.each(event.participant.split(','), function (index, value) {
      participant += '<a href="#" class="avatar w-'+size+'"><img src="../assets/img/a'+value+'.jpg"></a>';
    });
    return participant;
  }

  var init = function(){
    $.ajax('../assets/api/fullcalendar.json').done(function(data){
      // make up the start / end date
      $.each(data, function(index,item){
        item.start = moment().startOf('week').add(index, 'd').add(Math.floor((Math.random() * 10) + 1) - index, 'h').add(index*5,'m');
        item.end = moment(item.start).add(Math.floor((Math.random() * 10) + 3) + index/3, 'h');
      });
      option.events = data;
      calendar = $('#fullcalendar').fullCalendar(option);

      sr.reveal('#fullcalendar', {viewFactor: 0, delay: 10, origin: 'left', distance:'100vw', scale: 1});
      sr.reveal('.fc-event', {
        viewFactor: 0, 
        delay: 500,
        afterReveal:function (el) {
          $(el).css('transform', 'none');
          if(!noticed){
            notie.alert({ text: 'Start on "Add Event" button', position: 'top' });
            noticed = true;
          }
        }
      }, 50);

      setupEvents();
    });
  }

  // for ajax to init again
  $.fn.fullCalendar.init = init;

})(jQuery);
