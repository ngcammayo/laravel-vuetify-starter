@extends('layouts.app')

@section('content')
    <v-container fluid>
        <v-row>
            <v-col xs4="xs4"></v-col>
            <v-col xs4="xs4">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <v-card>
                        <v-card-row class="primary">
                            <v-card-title class="white--text">Register</v-card-title>
                        </v-card-row>
                        <v-card-text>
                            <v-text-input
                                    id="name"
                                    name="name"
                                    label="Name"
                                    value="{{ old('name') }}"
                            ></v-text-input>

                            @if ($errors->has('name'))
                                <span class="red--text">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif

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

                            <v-text-input
                                    id="password-confirm"
                                    name="password_confirmation"
                                    label="Confirm Password"
                                    type="password"
                            ></v-text-input>

                            @if ($errors->has('password_confirmation'))
                                <span class="red--text">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </v-card-text>
                        <v-card-row actions>
                            <v-btn type="submit" primary>
                                Register
                            </v-btn>
                        </v-card-row>
                    </v-card>
                </form>
            </v-col>
        </v-row>
    </v-container>
@endsection
