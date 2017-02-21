@extends('layouts.app')

@section('content')
    <v-row>
        <v-col md2="md2" lg4="lg4"></v-col>
        <v-col xs12="xs12" md8="md8" lg4="lg4">
            <form role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <v-card>
                    <v-card-row class="primary">
                        <v-card-title class="white--text">Reset Password</v-card-title>
                    </v-card-row>
                    @if (session('status'))
                        <v-alert success v-bind:value="true">
                            {{ session('status') }}
                        </v-alert>
                    @endif
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
                            Reset Password
                        </v-btn>
                    </v-card-row>
                </v-card>
            </form>
        </v-col>
    </v-row>
@endsection
