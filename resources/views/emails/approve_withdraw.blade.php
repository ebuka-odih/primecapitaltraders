@component('mail::message')
# Dear {{ $withdraw->user['name'] }}

Your withdrawal request of {{ $withdraw->amount }} has been approved and will be sent to your provided payment method


Thanks,<br>
{{ config('app.name') }}
@endcomponent
