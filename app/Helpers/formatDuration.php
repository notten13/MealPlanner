<?php
function formatDuration($minutes) {
    if ($minutes < 60) {
        return $minutes . ' minutes';
    } else {
        return intdiv($minutes, 60) . ' hours ' . ($minutes % 60) . ' minutes';
    }
}