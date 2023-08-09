@component('mail::message')
# Wyniki przesłanego formularza

Dane identyfikacyjne przesyłająego oraz informacje
odnośnie wybranej kwoty weksla wraz z okresem spłaty.<br><br>
Imię: {{ $data['name'] }}<br>
Nazwisko: {{ $data['surname'] }}<br>
Adres e-mail: {{ $data['email'] }}<br>
Miejscowość: {{ $data['city'] }}<br>
Kod pocztowy: {{ $data['zip_code'] }}<br>
Ulica: {{ $data['street'] }}<br>
Nr domu/mieszkania: {{ $data['home_number'] }}<br>
Kwota weksla: {{ $data['credits'] }} zł.<br>
Okres spłaty: {{ $data['rates'] }} m-cy.<br>

@endcomponent
