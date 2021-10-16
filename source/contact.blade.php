@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
		<div class="form-group mb--2">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="sender"><i class="fas fa-user"></i>&nbsp;Name</label>
				</div>
				<input class="form-control" type="text" name="sender" id="sender" required>
			</div>

			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="email"><i class="fas fa-at"></i>&nbsp;Email</label>
				</div>
				<input class="form-control" type="email" name="email" id="email" required>
			</div>
        </div>
		
        <div class="input-group mb--2">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-phone"></i>&nbsp;Phone #</span>
			</div>
			<input class="form-control" type="text" name="phone" id="phone" placeholder="optional">
		</div>
		
        <div class="input-group mb--2">
            <label class="input-group-text mb--1" for="message"><i class="fas fa-comment"></i>&nbsp;Message</label>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

        <input type="submit" name="submit" value="Send">
    </form>
@endsection
