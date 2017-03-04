

@extends('main')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Contact Me</h1>
                    <hr>
                      <form>
                        <div class="form-group">
                          <label name="email">Email:</label>
                          <input id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label name="email">Subject:</label>
                          <input id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label name="email">Message:</label>
                          <textarea id="email" name="email" class="form-control">Type your message here...
                          </textarea>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn success">
                      </form>
                </div>
            </div>
        </div>
@endsection
