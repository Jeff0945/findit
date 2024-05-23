<x-admin.layout>
    <x-slot:title>View item</x-slot:title>

    <form style="width: 1920px;height: 1080px;background: rgba(240, 238, 226, 1);">
        <section style="width: 1200px;margin-left: 400px;height: 800px;margin-top: 103px;background: whitesmoke;">
            <header style="width: 760px;height: 360px;margin-left: 400px;">
                <div style="height: 360px;">
                    <div>
                        <p style="font-size: 25px;color: rgba(53, 51, 45, 1);font-weight: bold;font-family: 'Inter';height: 40px;">
                            Name of an Item:</p>
                        <input class="form-control d-xxl-flex" type="text" style="margin-top: -13px;" value="{{ $item->name }}" required/>
                    </div>
                    <div style="height: 70px;margin-bottom: 0px;margin-top: 9px;">
                        <p style="font-size: 18px;color: rgba(53, 51, 45, 1);font-weight: bold;font-family: 'Inter';height: 30px;">
                            Date Posted:</p>
                        <input class="form-control" type="text" style="margin-top: -13px;" value="{{ $item->created_on }}" required/>
                    </div>
                    <div style="height: 70px;margin-bottom: 0px;">
                        <p style="font-size: 18px;color: rgba(53, 51, 45, 1);font-weight: bold;font-family: 'Inter';height: 30px;">
                            Location:</p>
                        <input class="form-control" type="text" style="margin-top: -13px;" value="{{ $item->found_at }}" required/>
                    </div>
                    <div style="height: 70px;margin-bottom: 0px;">
                        <p style="font-size: 18px;color: rgba(53, 51, 45, 1);font-weight: bold;font-family: 'Inter';height: 30px;">
                            Status:</p>
                        <input class="form-control" type="text" style="margin-top: -13px;" value="{{ $item->status_text }}" required/>
                    </div>
                    <div style="height: 70px;margin-bottom: 0px;">
                        <p style="font-size: 18px;font-weight: bold;font-family: 'Inter';color: rgba(53, 51, 45, 1);margin-bottom: 3px;">
                            Characteristics:</p>
                        <input class="form-control" type="text" style="margin-top: 5px;" value="{{ $item->characteristics }}" required/>
                    </div>
                </div>
            </header>
            <div style="width: 400px;height: 360px;margin-top: -360px;">
                <img width="380" height="280" style="width: 380px;height: 300px;margin-top: 0px;" src="{{ $item->attachment?->url }}"/>
                <input class="form-control" type="file" style="width: 380px;" required accept="image/*"/>
            </div>
            <div style="height: 350px;padding-bottom: 40px;margin-top: 30px;">
                <div class="container" style="padding-bottom: 40px;">
                    <div class="row" style="height: 300px;">
                        <div class="col-md-6">
                            <div style="height: 54px;margin-bottom: 0px;margin-top: 0px;">
                                <div style="width: 580px;height: 55px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);padding-bottom: 0px;padding-top: 0px;margin-bottom: 0px;height: 25px;">
                                        <strong>Time and Date Claimed:</strong></p>
                                </div>
                                <input class="form-control" type="text"
                                       style="height: 30px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;margin-top: -26px;"
                                       value="{{ $item->claimed_on }}"
                                       required/>
                                <div style="height: 55px;margin-bottom: 0px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Student ID:</strong></p><input class="form-control" type="text"
                                                                               style="height: 30px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;"
                                                                               value="{{ $item->claimedBy?->id_number }}"
                                                                               required/>
                                </div>
                                <div style="height: 55px;margin-top: 0px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Claimed by:</strong></p><input class="form-control" type="text"
                                                                               style="height: 30px;padding-top: 0px;padding-right: 0px;padding-left: 0px;padding-bottom: 0px;"
                                                                               value="{{ $item->claimedBy?->name }}"
                                                                               required/>
                                </div>
                                <div style="height: 55px;margin-bottom: 0px;margin-top: 6px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Contact Number:</strong></p><input class="form-control" type="text"
                                                                                   style="height: 30px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;"
                                                                                   value="{{ $item->claimedBy?->contact_number }}"
                                                                                   required/>
                                </div>
                                <div style="height: 55px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Released by:</strong></p><input class="form-control" type="text"
                                                                                style="height: 30px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;"
                                                                                value="{{ $item->releasedBy?->name }}"
                                                                                required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="height: 54px;margin-bottom: 0px;margin-top: 0px;">
                                <div style="width: 580px;height: 55px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);padding-bottom: 0px;padding-top: 0px;margin-bottom: 0px;height: 25px;">
                                        <strong>Time and Date Reported:</strong></p>
                                </div>
                                <input class="form-control" type="text"
                                       style="height: 30px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;margin-top: -26px;"
                                       value="{{ $item->reported_on }}"
                                       required/>
                                <div style="height: 55px;margin-bottom: 0px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Student ID:</strong></p><input class="form-control" type="text"
                                                                               style="height: 30px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;"
                                                                               value="{{ $item->reportedBy?->id_number }}"
                                                                               required/>
                                </div>
                                <div style="height: 55px;margin-top: 0px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Reported by:</strong></p><input class="form-control" type="text"
                                                                                style="height: 30px;padding-top: 0px;padding-right: 0px;padding-left: 0px;padding-bottom: 0px;"
                                                                                value="{{ $item->reportedBy?->name }}"
                                                                                required/>
                                </div>
                                <div style="height: 55px;margin-bottom: 0px;margin-top: 6px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Contact Number:</strong></p><input class="form-control" type="text"
                                                                                   style="height: 30px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;"
                                                                                   value="{{ $item->reportedBy?->contact_number }}"
                                                                                   required/>
                                </div>
                                <div style="height: 55px;">
                                    <p style="font-family: 'Inter';font-size: 18px;font-weight: bold;color: rgba(53, 51, 45, 1);margin-bottom: 0px;height: 25px;">
                                        <strong>Acknowledged by:</strong></p><input class="form-control" type="text"
                                                                                style="height: 30px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;"
                                                                                value="{{ $item->acknowledgedBy?->name }}"
                                                                                required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 100px;"><a class="btn btn-primary d-xxl-flex justify-content-xxl-center" role="button"
                                           style="background: rgba(223, 185, 123, 1);width: 81px;font-size: 18px;font-family: 'Inter';padding-left: 0px;padding-bottom: 0px;padding-right: 0px;padding-top: 0px;margin-right: 0px;margin-left: 1080px;"
                                           href="{{ route('admin.items.edit', ['item' => $item->id]) }}">Edit</a></div>
        </section>
    </form>
</x-admin.layout>