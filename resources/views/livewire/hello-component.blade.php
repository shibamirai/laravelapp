<div>
    {{ $message }}
    @livewire('notification', [
        'title' => $alert_title,
        'content' => $alert_content
    ])
</div>
