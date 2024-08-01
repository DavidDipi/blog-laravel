@props(['type' => 'info'])

@php
    switch ($type) {
        case 'primary':
            $class = 'alert-primary';
            break;
        case 'secondary':
            $class = 'alert-secondary';
            break;
        case 'danger':
            $class = 'alert-danger';
            break;
        case 'warning':
            $class = 'alert-warning';
            break;
        case 'info':
            $class = 'alert-info';
            break;
        case 'light':
            $class = 'alert-light';
            break;
        case 'dark':
            $class = 'alert-dark';
            break;
        default:
            $class = 'alert-info';
            break;
    }

@endphp

<div {{ $attributes -> merge(['class' => 'alert ' . $class ]) }} role="alert">
    <span>{{ $title ?? 'Info alert!' }} </span> {{ $slot }}
</div>
