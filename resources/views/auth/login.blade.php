@extends('layouts.app')

@section('content')
    <v-container fluid>
        <v-row>
            <v-col xs4="xs4"></v-col>
            <v-col xs4="xs4">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <v-card>
                        <v-card-row class="primary">
                            <v-card-title class="white--text">Login</v-card-title>
                        </v-card-row>
                        <v-card-text>

                            <v-text-input
                                    id="email"
                                    name="email"
                                    label="E-mail Address"
                                    type="email"
                                    value="{{ old('email') }}"
                            ></v-text-input>

                            @if ($errors->has('email'))
                                <span class="red--text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif

                            <v-text-input
                                    id="password"
                                    name="password"
                                    label="Password"
                                    type="password"
                            ></v-text-input>

                            @if ($errors->has('password'))
                                <span class="red--text">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif

                            <v-checkbox
                                    id="remember"
                                    name="remember"
                                    label="Remember Me"
                                    filled {{ old('remember') ? 'checked' : '' }}
                            ></v-checkbox>
                            <v-spacer></v-spacer>

                        </v-card-text>
                        <v-card-row actions>
                            <v-btn type="submit" primary>
                                Login
                            </v-btn>
                            <v-spacer></v-spacer>
                            <a class="light flat" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </v-card-row>
                    </v-card>
                </form>
            </v-col>
        </v-row>
    </v-container>
@endsection
