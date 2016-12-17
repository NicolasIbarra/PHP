<?php

// WATCH VIDEO https://www.youtube.com/watch?v=iCpyL6PkfwE

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Calendar {
  private $month;
  private $year;
  private $days_of_week;
  private $num_days;
  private $date_info;
  private $day_of_week;

  public function __construct( $month, $year, $days_of_week = array('S','M','T','W','Th','F','S') ) {
    // Bare minimum setup needed to build calendar
    $this->month = $month;
    $this->year = $year;
    $this->days_of_week = $days_of_week;
    $this->num_days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
    $this->date_info = getdate(strtotime('first day of', mktime(0,0,0,$this->month,1,$this->year)));
    $this->day_of_week = $this->date_info['wday'];
  }

  public function show() {
    // Month and year caption
    $output = '<table class="calendar">';
    $output .= '<caption>' . $this->date_info['month'] . ' ' . $this->year . '</caption>';
    $output .= '<tr>';

    // Days of the week header
    foreach ( $this->days_of_week as $day ) {
      $output .= '<th class="header">' . $day . '</th>';
    }

    // Close header row and open first row of days
    $output .= '</tr><tr>';

    // If first day of a month does not fall on a Sunday, then we need to fill
    // beginning space using colspan
    if ( $this->day_of_week > 0 ) {
      $output .= '<td colspan="' . $this->day_of_week . '"></td>';
    }

    // Start num_days counter
    $current_day = 1;

    // Loop and build days
    while ( $current_day <= $this->num_days ) {
      // Reset 'day of week' counter and close each row if end of row
      if ( $this->day_of_week == 7 ) {
        $this->day_of_week = 0;
        $output .= '</tr><tr>';
      }

      // Build each day cell
      $output .= '<td class="day">' . $current_day . '</td>';

      // Increment counters
      $current_day++;
      $this->day_of_week++;
    }

    // Once num_days counter stops, if day of week counter is not 7, then we
    // need to fill the remaining space on the row using colspan
    if ( $this->day_of_week != 7 ) {
      $remaining_days = 7 - $this->day_of_week;
      $output .= '<td colspan="'. $remaining_days .'"></td>';
    }

    // Close final row and table
    $output .= '</tr>';
    $output .= '</table>';

    // Output this ish
    echo $output;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <?php
    $calendar = new Calendar(6,2016);
    $calendar->show();
    ?>
  </body>
</html>
