<?php
function getFormattedPhone ($phone) {
    return '+375 ('.substr($phone, -9, 2).') '.substr($phone, -7, 3).'-'.substr($phone, -4, 2).'-'.substr($phone, -2);
}
