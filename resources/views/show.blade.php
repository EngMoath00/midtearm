      @extends('layouts.app')
      @section('content')
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          #NSODFC7BMU - Ticket 1
                      </div>

                      <div class="panel-body">

                          @foreach ($ticket as $index => $ticket)
                              <div class="ticket-info">
                                  <p>Ticket no. {{ ++$index }}</p>
                                  <p>{{ $ticket->Categry }}</p>
                                  <p>
                                      Status: <span class="label label-success">{{ $ticket->Status }}</span>
                                  </p>
                                  <p>{{ $ticket->update_at }}</p>
                              </div>

                              <hr>
                          @endforeach

                          <div class="comments">
                          </div>

                          <div class="comment-form">
                              <form action="http://localhost:8000/comment" method="POST" class="form">
                                  <input type="hidden" name="_token" value="zOBdREu0F12XsUrYS9S3vHrlAamHCBGoZV1Zf9C9">

                                  <input type="hidden" name="ticket_id" value="1">

                                  <div class="form-group">
                                      <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                  </div>

                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      @endsection
