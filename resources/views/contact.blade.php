<x-layout>
    <div class="backgroundForm" style="margin-top: 100px">
        <div class="containerForm">
            <div class="screenForm" data-aos="fade-right">
                <div class="screenForm-header">
                    <div class="screenForm-header-left">
                        <div class="screenFrom-header-button close"></div>
                        <div class="screenFrom-header-button maximize"></div>
                        <div class="screenForm-header-button minimize"></div>
                    </div>
                    <div class="screenForm-header-right">
                        <div class="screenFrom-header-ellipsis"></div>
                        <div class="screenForm-header-ellipsis"></div>
                        <div class="screenForm-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screenForm-body">
                    <div class="screenForm-body-item left">
                        <div class="appForm-title">
                            <span>CONTACT</span>
                            <span>US</span>
                        </div>
                    </div>


                    <form action="{{route('send.email')}}" method="POST">
                        @csrf
                        <div class="screenForm-body-item">
                            <div class="app-app-contactform">
                                <div class="appForm-form-group">
                                    <input class="appForm-form-control" name="name" placeholder="NAME">
                                </div>
                                <div class="appForm-form-group">
                                    <input class="appForm-form-control" name="email" placeholder="EMAIL">
                                </div>
                                <div class="appForm-form-group">
                                    <input class="appForm-form-control" name="phone" placeholder="CONTACT NO">
                                </div>
                                <div class="appForm-form-group message">
                                    <input class="appForm-form-control" name="message" placeholder="MESSAGE">
                                </div>
                                <div class="appForm-form-group buttons">
                                    <button class="appForm-form-button">CANCEL</button>
                                    <button type="submit" class="appForm-form-button">SEND</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @if(Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message_sent')}}
        </div>
    @endif
</x-layout>
