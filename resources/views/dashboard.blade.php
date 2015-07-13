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
                        <dt>IP Address</dt>
                        <dd>127.0.0.1</dd>
                        
                        <dt>Port</dt>
                        <dd>7777</dd>
                    </dl>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="medium-8 columns">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            
            <div class="medium-4 columns">
                <div class="panel radius purple">
                    <h3>REST Information</h3>
                    <dl>
                        <dt>IP Address</dt>
                        <dd>{{ config('tshock.rest.ip') }}</dd>
                        
                        <dt>Port</dt>
                        <dd>{{ config('tshock.rest.port') }}</dd>
                        
                        <dt>User</dt>
                        <dd>{{ config('tshock.rest.username') }}</dd>
                    </dl>
                </div>
            </div>
            
            <div class="columns">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </main>
@stop
