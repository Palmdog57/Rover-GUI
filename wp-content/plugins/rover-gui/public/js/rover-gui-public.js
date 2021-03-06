(function( $ ) {
	'use strict';
		
		jQuery(function ($) { 
      var socket = io.connect('http://127.0.0.1:8080');
      console.log('you are connected dont worry');


      socket.emit('dump', function(data){
        //$('#dumpdiv').append('<pre>' + data + '</pre>');
      	console.log(data);
      });

var previous_time_stamp = '0';
      //socket.emit('new_data', function(data){
      socket.on('new_data', function(data){

        var time_stamp = data['o']['timegenerated'];
        var rover_id = data['o']['_id'];
        var time_generated = data['o']['timegenerated'];
        var time_reported = data['o']['timereported'];
        var hostname = data['o']['hostname'];
        var source_ip = data['o']['fromhost-ip'];
        var message = data['o']['msg'];
        var severity_num = data['o']['syslogseverity'];
        var alert = data['o']['syslogseverity-text'];

      //$('#dumpdiv').append('<pre>' + data + '</pre>');
      	if(time_stamp == previous_time_stamp ){

        }else{
      	   console.log(data['o']);

           var $log_activity = '<tr class="table_data_dsn ' + rover_id + '">';
                $log_activity += '<td><p>' + time_generated + '</p></td>';
                $log_activity += '<td><p>' + time_reported + '</p></td>';
                $log_activity += '<td><p>' + hostname + '</p></td>';
                $log_activity += '<td><p>' + source_ip + '</p></td>';
                $log_activity += '<td><p>' + message + '</p></td>';
                $log_activity += '<td><p>' + severity_num + '</p></td>';
                $log_activity += '<td><p>' + alert + '</p></td>';
                $log_activity += '</tr>';

                $('#log_activity_tbl').append($log_activity);

/******************************OFFENSES*********************/
          var  $message_chk = [];
      
            $message_chk = {
              'malware' : "Malware Alert",
              'botnet' : "Active Connection to Botnet Command and Control Center",
              'login failures' : "Multiple Local User Login Failures"
      };
      
// running a each loop on the sentence so it can say more than just the alerting word
// this loops through each individual word within a sentence message_text being each word changing on each loop and then runs it throught the if statement untill it flags up
// a word used within the alerting array before putting anything in the offence log. if it finds nothing it just adds it to general log activity.
var $individual_word_array = message.split(' ');
var last_id = $individual_word_array.length - 1; // find the id of the last word
$.each(individual_word_array, function(i, message_text) {
      
      // this esentailly just checks if the message from the rsyslog contains the word hacker, bot, firewall, etc. you can add more to the array
      if(message_text in  $message_chk{

        console.log('in array');

            var description = $message_chk[message];
            
            var offense_type = 'null';

            if(severity_num > 6){
              offense_type = 'Warning';
            }

            if(severity_num > 3 && severity_num < 6){
              offense_type = 'Alert';
            }

            if(severity_num < 3){
              offense_type = 'Notice';
          // it exists in the array and will now now use code to build the offenses log already written in your js file using 
          // check it is using array_containing_alerts[message_text] when it needs to print the message into the vaiable writting the html

         return false; // exits out of each statement the second if finds the alerting word
      }else{
          
          console.log('alert not found'); // for this word tested anyway 
          if(i == last_id){
              console.log("successfully found no alerts");
          }
      }
    
  
});

          
          console.log($message_chk);

          var $offence_log = '<tr class="table_data_dsn ' + rover_id + '">';
                  $offence_log += '<td><p>' + rover_id + '</p></td>';
                  $offence_log += '<td><p>' + description + '</p></td>';
                  $offence_log += '<td><p>' + offense_type + '</p></td>';
                  $offence_log += '<td><p>' + hostname + '</p></td>';
                  $offence_log += '<td><p>' + alert  + '</p></td>';
                  $offence_log += '<td><p>' + time_generated + '</p></td>';
                  $offence_log += '</tr>';

          console.log('write to table');
          $('#offence_tbl').append($offence_log);

      
	/* Code to go here */
      
         var w = $(window).width();
         var h = $(window).height();
      $('#full-body').css("width" , w);
      $('#full-body').css("height" , h);
      
      var save_current = 1;
      window.rover_btns = rover_btns;
      function rover_btns(n){
        //consol.log('button number :' + n);
        if(n == save_current){
        
        }else{
        $("#rover-page-" + save_current).addClass('inactive');
        $("#rover-page-" + n).removeClass('inactive');
        $("#rover-page-" + n).addClass('active');
        }
        
        console.log(save_current + ':' + n);
        save_current = n;
        
      
      }

      window.in_array = in_array;
      function in_array(needle, haystack, argStrict) {

        var key = '',
          strict = !! argStrict;

        if (strict) {
          for (key in haystack) {
            if (haystack[key] === needle) {
              return true;
            }
          }
        } else {
          for (key in haystack) {
            if (haystack[key] == needle) {
              return true;
            }
          }
        }
        return false;
      }

		});

})( jQuery );
