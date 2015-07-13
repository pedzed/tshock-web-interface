@extends('layout/main')

@section('content')
    <header class="main">
        <div class="row">
            <div class="medium-8 columns">
                <h1>Dashboard</h1>
            </div>
            
            <div class="medium-4 columns">
                <!-- <div class="online-status right">
                    <i class="fa fa-circle status-icon status-online"></i>
                    Server Online
                </div> -->
                <div class="online-status right">
                    <i class="fa fa-circle status-icon status-offline"></i>
                    Server Offline
                </div>
            </div>
        </div>
    </header>
    
    <main role="main">
        <div class="row">
            <div class="medium-4 columns">
                <div class="panel radius green">
                    <h3>Lorem Ipsum</h3>
                    
                    <div class="row text-center">
                        <div class="small-4 columns">
                            <dl>
                                <dt>{key}</dt>
                                <dd>{value}</dd>
                            </dl>
                        </div>
                        
                        <div class="small-4 columns">
                            <dl>
                                <dt>{key}</dt>
                                <dd>{value}</dd>
                            </dl>
                        </div>
                        
                        <div class="small-4 columns">
                            <dl>
                                <dt>{key}</dt>
                                <dd>{value}</dd>
                            </dl>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="columns">
                            <div class="progress">
                                <div class="meter" style="width: {{ rand(0, 100) }}%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="columns text-center">
                            Lorem ipsum dolor sit.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="medium-4 columns">
                <div class="panel radius red">
                    <h3>Lorem Ipsum</h3>
                    
                    <div class="row text-center">
                        <div class="small-4 columns">
                            <dl>
                                <dt>{key}</dt>
                                <dd>{value}</dd>
                            </dl>
                        </div>
                        
                        <div class="small-4 columns">
                            <dl>
                                <dt>{key}</dt>
                                <dd>{value}</dd>
                            </dl>
                        </div>
                        
                        <div class="small-4 columns">
                            <dl>
                                <dt>{key}</dt>
                                <dd>{value}</dd>
                            </dl>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="columns">
                            <div class="progress">
                                <div class="meter" style="width: {{ rand(0, 100) }}%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="columns text-center">
                            Lorem ipsum dolor sit.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="medium-4 columns">
                <div class="panel radius blue">
                    <h3>Server Information</h3>
                    <dl>
                        <dt>Host</dt>
                        <dd>127.0.0.1</dd>
                        
                        <dt>Port</dt>
                        <dd>7777</dd>
                    </dl>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="medium-8 columns">
                <h3>Online Players</h3>
                
                <table class="user-list full-width">
                    <tr>
                        <th width="10%"></th>
                        <th width="20%">Rank</th>
                        <th width="70%">Player</th>
                    </tr>
                    
                    @foreach(range(1, 7) as $player)
                        <tr>
                            <td class="avatar">
                                <img src="{{ url('images/unknown-player.png') }}" />
                            </td>
                            <td>
                                <a href="#">Super Admin</a>
                            </td>
                            <td>
                                <a href="#">John Doe</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            
            <div class="medium-4 columns">
                <div class="panel radius purple">
                    <h3>REST Information</h3>
                    <dl>
                        <dt>Host/port</dt>
                        <dd>{{ config('tshock.rest.host') }}:{{ config('tshock.rest.port') }}</dd>
                        
                        <dt>User</dt>
                        <dd>{{ config('tshock.rest.username') }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </main>
@stop
