# coding:utf-8
import os


class NewNames(object):
    def __init__(self):
        self.root_path = os.getcwd()
        self.text = "%s/source.txt" % self.root_path
        self.names = []
        self.target_path = "%s/images/" % self.root_path
        self.source_file = "%s/source.jpg" % self.root_path

    def get_list_txt(self):
        with open(self.text, "r") as f:
            s = f.readlines()
            for item in s:
                self.names.append(item)

    def copy_files(self):
        for item in self.names:
            cmd = "cp %s %s/%s.jpg" % (self.source_file, self.target_path, item.strip())
            os.system(cmd)


if __name__ == "__main__":

    name = NewNames()
    name.get_list_txt()
    name.copy_files()
