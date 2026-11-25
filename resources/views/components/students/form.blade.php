
@props(['student'])

<x-form-input
    name="name"
    label="Name"
    :value="$student->name"
    placeholder="Enter student name"
    maxlength="255"
    required
/>

<x-form-input
    name="email"
    label="Email"
    type="email"
    :value="$student->email"
    placeholder="Enter email address"
    required
/>

<x-form-input
    name="phone"
    label="Phone"
    type="tel"
    :value="$student->phone"
    placeholder="Enter 10 digit phone number"
    maxlength="10"
    minlength="10"
    pattern="[0-9]{10}"
    inputmode="numeric"
    required
/>

<x-form-textarea
    name="address"
    label="Address"
    :value="$student->address"
    maxlength="500"
/>

<x-form-input
    name="date_of_birth"
    label="Date of Birth"
    type="date"
    :value="$student->date_of_birth?->format('Y-m-d')"
    max="{{ date('Y-m-d') }}"
/>
