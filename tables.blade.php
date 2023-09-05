@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Authors table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Members</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Function</th>
                                              <th  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                                <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Mobile</th>
                                            
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                     <td>
                                       <div class="d-flex px-2 py-1">
                                             <div>
                                      <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $member->name }}</h6>
                                       <p class="text-xs text-secondary mb-0">{{ $member->email }}</p>
                                   </div>
                                       </div>
                                     </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $member->post->title ?? '' }}</p>
                                    <p class="text-xs text-secondary mb-0">
                                        @foreach($member->location as $location)
                                       {{ $location->place }}<br>
                                       @endforeach
                                    
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @if ($member->role === 'Admin')
                                        <span class="badge badge-sm bg-gradient-success">{{ $member->role }}</span>
                                    @elseif ($member->role === 'Client')
                                        <span class="badge badge-sm bg-secondary">{{ $member->role }}</span>
                                   
                                        
                                    @endif
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $member->formatted_mobile }}</span>
                                </td>
                                
                            </tr>
                            @endforeach

                                    
                                       
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
