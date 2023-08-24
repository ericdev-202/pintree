<div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add event</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addevent.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">img:</label>
                                    <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Event Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="EventName">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Category Name:</label>
                                    <select class="form-control" name="CategoryName" id="recipient-name">
                                        <option></option>
                                        <option value="Environment Conservation">Environment Conservation</option>
                                        <option value="Environment Conservation party">Environment Conservation party</option>
                                        <option value="Tree Planting Day">Tree Planting Day</option>
                                        <option value="Road Trip">Road Trip</option>
                                        <option value="Tree Planting Party">Tree Planting Party</option>
                                        <option value="Pool party">Pool party</option>
                                    </select>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Location:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Location">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Description:</label>
                                    <textarea style="height: 130px;" type="text" class="form-control" id="recipient-name" name="Description"></textarea>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Event Charges:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Charges">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Date of event:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="DateOfEvent">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Event</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>