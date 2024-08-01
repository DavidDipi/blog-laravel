<div {{ $attributes -> merge(['class' => 'alert ' . $class ]) }} role="alert">
    <span>{{ $title ?? 'Info alert!' }} </span> {{ $slot }}
</div>