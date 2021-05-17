<div>
    <div class="row w-100 mt-4">
        <div class="col-lg-12">
            <div class="mb-4">
                <!-- Search -->
                <div class="row justify-content-between">
                    <div class="col-12">
                        <div class="input-group rounded">
                            <input type="search" class="form-control" placeholder="البحث عن صرفية" aria-label="Search" aria-describedby="search-addon" wire:model="search"/>
                            <span class="input-group-text border-0 bg-secondary" >
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Start table -->
                <div class="table-responsive text-center">
                    <table class="table table-cards text-center" >
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">مقدار المصروف</th>
                                <th scope="col">نوع الصرفية</th>
                                <th scope="col">التاريخ</th>
                                <th scope="col">الوقت</th>
                                <th scope="col">الوصف</th>
                                <th scope="col">الوصل</th>
                                <th scope="col">التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($spendings as $count => $spending)
                                <tr class="hover-shadow-lg text-center">
                                    <td>
                                        <div class="media">
                                            <div class="media-body ml-4">
                                                {{$count + 1}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="media-body ml-4">
                                                <h6 class="h6">
                                                    @empty($spending->amount)
                                                        لا يوجد 
                                                    @else
                                                        {{ $spending->amount }}
                                                    @endempty
                                                </h6>
                                            </div>
                                        </div>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="media-body ml-4">
                                                    <h6 class="h6">
                                                        @empty($spending->type)
                                                            لا يوجد 
                                                        @else
                                                            {{ $spending->type }}
                                                        @endempty
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="media-body ml-4">
                                                <h6 class="h6">
                                                    @empty($spending->date)
                                                        لا يوجد 
                                                    @else
                                                        {{ $spending->date }}
                                                    @endempty
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="media-body ml-4">
                                                <h6 class="h6">
                                                    @empty($spending->time)
                                                        لا يوجد 
                                                    @else
                                                        {{ $spending->time }}
                                                    @endempty
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="media-body ml-4">
                                                <h6 class="h6">
                                                    @empty($spending->description)
                                                        لا يوجد 
                                                    @else
                                                        {{ $spending->description }}
                                                    @endempty
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="media-body ml-4">
                                                <h6 class="h6">
                                                    @empty($spending->bill)
                                                        لا يوجد 
                                                    @else
                                                        <img src="{{ asset('storage/photos/' . $spending->bill) }}">
                                                    @endempty
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-sm-1" data-toggle="tooltip" data-placement="top" title="تعديل">
                                                <i class="fas fa-pen text-primary"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <h4 class="text-center">
                                    لا يوجد صرفيات بعد
                                </h4>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div >
                    {{-- {{ $patients->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
