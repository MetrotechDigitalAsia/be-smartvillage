@extends('admin.persuratan.surat.dashboard')

@push('mail-styles')
    <link href="{{ asset('assets/be/css/mail/akta-kematian.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/be/css/mail/f-2.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('table')

    @livewire('mail-detail', ['mailId' => $data->id, 'perbekel' => $perbekel, 'kelian' => $kelian])
    {{-- @include('admin.mailView.f-2') --}}
    
@endsection

@push('script')

<script>

    function handleChangeInput(e){
        const btn = document.querySelector('.submit-mail-number-btn')
        if(e.value === '' || e.value === undefined ){
            btn.setAttribute('disabled', 'disabled')
        } else {
            btn.removeAttribute('disabled')
        }
    }

    function onActionClick(btn, type){
        const mailId = btn.getAttribute('data-mail-id')        
        const mailNum = btn.getAttribute('data-mail-num')
        const approveBtn = document.querySelector('.approve-btn')

        let mailType

        switch (type) {
            case 'Done':
                mailType = 'setujui'
                break;
            case 'Process':
                mailType = 'proses'
                break;
            case 'Rejected':
                mailType = 'tolak'
                break;
        }
        
        document.querySelector('.mail-type').innerHTML = mailType
        document.querySelector('.mail-num').innerHTML = mailNum

        approveBtn.setAttribute('data-href', `/persuratan/surat/changeStatus/${mailId}/${type}`)

    }

    function handleSubmit(btn){

        const href = btn.getAttribute('data-href')

        const opt = {
            type: 'success',
            placement: {
                from:'top',
                align: 'center'
            },
            animate: {
                enter: 'animate__animated animate__fadeInDown',
                exit: 'animate__animated animate__fadeOutUp'
            }
        }
        
        $.get(href)
            .done(function(res){

                console.log(res)

                $.notify({
                    message: res.message,
                }, opt)

                if(res.success){
                    Livewire.emit('refreshMailDetail')
                }
            })
            .fail(res => console.log(res.responseText))

    }

    function handleSetMailNumber(btn){

        const input = document.querySelector('#mail-number-form')
        const mailId = btn.getAttribute('data-mail-id')

        const opt = {
            type: 'success',
            placement: {
                from:'top',
                align: 'center'
            },
            animate: {
                enter: 'animate__animated animate__fadeInDown',
                exit: 'animate__animated animate__fadeOutUp'
            }
        }

        $.post(`/persuratan/surat/setMailNumber/${mailId}`, { mailNumber: input.value })
            .done(function(res){

                console.log(res)

                $.notify({
                    message: res.message,
                }, opt)

                if(res.success){
                    Livewire.emit('refreshMailDetail')
                }
            })
            .fail(res => console.log(res))


    }

</script>
    
@endpush